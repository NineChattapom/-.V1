<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body{
            background-color: #333;
        }

        .header{
            padding: 40px;
            color: #fff;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        .header h1,p{
            text-align: center;
        }

        .wheel{
            display: flex;
            justify-content: center;
            position: relative;
        }
        .center-circle{
            width: 100px;
            height: 100px;
            border-radius: 60px;
            background-color: #fff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .triangle{
            width: 0; 
            height: 0; 
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent; 
            border-right: 30px solid white; 
            position: absolute;
            top: 50%;
            right: -220%;
            transform: translateY(-50%);
        }
        textarea{
            background-color: rgba(20, 20, 20, 0.2);
            caret-color: #fff;
            resize: none;
            color: #fff;
        }
        .inputArea{
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
    </style>

</head>

<body >
    <div class="header">
        <h1>สุ่ม แผนก</h1>
        <p id="winner">NONE</p>
    </div>
    <div class="wheel">
        <canvas class="" id="canvas" width="500" height="500"></canvas>
        <div class="center-circle" onclick="spin()">
            <div class="triangle"></div>
        </div>
        
    </div>
    <div class="inputArea" onchange="createWheel()">
        <textarea rows="10" cols="30" >ก่อสร้าง
อิเล็ก
ไฟฟ้า
สำรวจ
สถาปัตยกรรม
ช่างกล
เทคนิคคอมพิวเตอร์
ช่างยนต์
</textarea>
    </div>

    <script>
        function randomColor(){
            r = Math.floor(Math.random() * 255);
            g = Math.floor(Math.random() * 255);
            b = Math.floor(Math.random() * 255);
            return {r,g,b}
        }
        function toRad(deg){
            return deg * (Math.PI / 180.0);
        }
        function randomRange(min,max){
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function easeOutSine(x) {
            return Math.sin((x * Math.PI) / 2);
        }
        // get percent between 2 number
        function getPercent(input,min,max){
            return (((input - min) * 100) / (max - min))/100
        }
    </script>

    <script>
        const canvas = document.getElementById("canvas")
        const ctx = canvas.getContext("2d")
        const width = document.getElementById("canvas").width
        const height = document.getElementById("canvas").height

        const centerX = width/2
        const centerY = height/2
        const radius = width/2

        let items = document.getElementsByTagName("textarea")[0].value.split("\n");

        let currentDeg = 0
        let step = 360/items.length
        let colors = []
        let itemDegs = {}

        for(let i = 0 ; i < items.length + 1;i++){
            colors.push(randomColor())
        }

        function createWheel(){
    items = document.getElementsByTagName("textarea")[0].value.trim().split("\n"); // <-- เพิ่ม trim() ด้วย
    step = 360 / items.length;
    colors = [];
    for(let i = 0; i < items.length; i++){
        colors.push(randomColor());
    }
    draw()
}

        draw()

        function draw(){
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, toRad(0), toRad(360))
            ctx.fillStyle = `rgb(${33},${33},${33})`
            ctx.lineTo(centerX, centerY);
            ctx.fill()

            let startDeg = currentDeg;
            for(let i = 0 ; i < items.length; i++, startDeg += step){
                let endDeg = startDeg + step

                color = colors[i]
                let colorStyle = `rgb(${color.r},${color.g},${color.b})`

                ctx.beginPath();
                rad = toRad(360/step);
                ctx.arc(centerX, centerY, radius - 2, toRad(startDeg), toRad(endDeg))
                let colorStyle2 = `rgb(${color.r - 30},${color.g - 30},${color.b - 30})`
                ctx.fillStyle = colorStyle2
                ctx.lineTo(centerX, centerY);
                ctx.fill()

                ctx.beginPath();
                rad = toRad(360/step);
                ctx.arc(centerX, centerY, radius - 30, toRad(startDeg), toRad(endDeg))
                ctx.fillStyle = colorStyle
                ctx.lineTo(centerX, centerY);
                ctx.fill()

                // draw text
                ctx.save();
                ctx.translate(centerX, centerY);
                ctx.rotate(toRad((startDeg + endDeg)/2));
                ctx.textAlign = "center";
                if(color.r > 150 || color.g > 150 || color.b > 150){
                    ctx.fillStyle = "#000";
                }
                else{
                    ctx.fillStyle = "#fff";
                }
                ctx.font = 'bold 24px serif';
                ctx.fillText(items[i], 130, 10);
                ctx.restore();

                itemDegs[items[i]] = 
                    {
                    "startDeg": startDeg,
                    "endDeg" : endDeg
                    }
                

                // check winner
                if(startDeg%360 < 360 && startDeg%360 > 270  && endDeg % 360 > 0 && endDeg%360 < 90 ){
                    document.getElementById("winner").innerHTML = items[i]
                }
            }
        }
        

        let speed = 0
        let maxRotation = randomRange(360* 3, 360 * 6)
        let pause = false
        function animate(){
            if(pause){
                return
            }
            speed = easeOutSine(getPercent(currentDeg ,maxRotation ,0)) * 20
            if(speed < 0.01){
                speed = 0
                pause = true
            }
            currentDeg += speed
            draw()
            window.requestAnimationFrame(animate);
        }
        
        function spin() {
    if (speed !== 0) {
        return;
    }

    currentDeg = 0;
    createWheel();
    draw();

    // ✅ สุ่มแผนกจากรายการ
    const randomIndex = Math.floor(Math.random() * items.length);
    const selectedItem = items[randomIndex];

    // ✅ คำนวณองศาเป้าหมายของแผนกที่สุ่มได้
    const degTarget = itemDegs[selectedItem]?.endDeg || 0;

    // ✅ หมุนหลายรอบแบบสุ่ม แล้วหยุดที่แผนกที่สุ่มได้
    maxRotation = (360 * randomRange(3, 6)) - degTarget + 10;

    console.log("สุ่มได้:", selectedItem);
    pause = false;
    window.requestAnimationFrame(animate);
}


    </script>

    <script>
        function animate(){
    if(pause){
        return
    }
    speed = easeOutSine(getPercent(currentDeg ,maxRotation ,0)) * 20
    if(speed < 0.01){
        speed = 0
        pause = true

        // ✅ แสดง SweetAlert เมื่อหยุดหมุน
        const winner = document.getElementById("winner").innerText;
        Swal.fire({
            title: '🎉 เเผนกที่ได้ทำกิจกรรมคือ!',
            text: winner,
            icon: 'success',
            confirmButtonText: 'เย้!'
        });

        return;
    }
    currentDeg += speed
    draw()
    window.requestAnimationFrame(animate);
}

    </script>
</body>

</html>