<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Hikrydex — Инструкция</title>

<style>
body{
    margin:0;
    min-height:100vh;
    display:flex;
    flex-direction:column;
    align-items:center;
    font-family:Arial, sans-serif;
    color:white;
    background:
        radial-gradient(circle at 20% 30%, rgba(139,92,246,0.2), transparent 40%),
        radial-gradient(circle at 80% 70%, rgba(168,85,247,0.2), transparent 40%),
        linear-gradient(135deg,#0f172a,#020617);
}


.header{
    text-align:center;
    margin-top:50px;
}

.header h1{
    font-size:36px;
    letter-spacing:5px;
}

.line{
    width:300px;
    height:3px;
    background:linear-gradient(90deg,#7c3aed,#a855f7);
    margin:15px auto;
    border-radius:5px;
    box-shadow:0 0 15px #7c3aed;
}


.container{
    margin-top:40px;
    width:90%;
    max-width:800px;
    padding:40px;
    border-radius:18px;
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:
        0 10px 40px rgba(0,0,0,0.6),
        inset 0 0 30px rgba(255,255,255,0.05);
}


.step{
    margin-bottom:30px;
    padding:20px;
    border-radius:12px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.07);
}

.step h3{
    margin-bottom:10px;
    color:#a78bfa;
}

.step p{
    color:#cbd5f5;
    line-height:1.5;
}


.warning{
    border:1px solid rgba(239,68,68,0.4);
    background:rgba(239,68,68,0.08);
}


.download-btn{
    display:block;
    text-align:center;
    padding:14px;
    margin-top:20px;
    border-radius:10px;
    text-decoration:none;
    color:white;
    background:linear-gradient(135deg,#7c3aed,#9333ea);
    font-weight:bold;
    transition:0.25s;
}

.download-btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 20px #7c3aed;
}
</style>
</head>

<body>

<div class="header">
    <h1>ИНСТРУКЦИЯ</h1>
    <div class="line"></div>
</div>

<div class="container">


    <div class="step warning">
        <h3>⚠ Важно</h3>
        <p>
            Не храните лоадер в очевидных местах (например, рабочий стол).
            <br>Если вы находитесь в России — рекомендуется использовать VPN.<br>
			Для стабильной работы лучше всего подходит Cloudflare WARP.
        </p>
    </div>


    <div class="step">
        <h3>1. Подготовка системы</h3>
        <p>
            Если при запуске возникают ошибки — установите необходимые библиотеки:
            <br><br>
            Visual C++ Redistributable (All-in-One пакет).
        </p>
    </div>


    <div class="step">
        <h3>2. Запуск</h3>
        <p>
            Запустите лоадер и введите выданный ключ.
            После этого откройте лаунчер игры.
        </p>
    </div>


    <div class="step">
        <h3>3. Использование</h3>
        <p>
            После сигнала о загрузке можно заходить в игру.
            Все основные функции активируются автоматически.
        </p>
    </div>


    <div class="step">
        <h3>4. Решение проблем</h3>
        <p>
            Если что-то не работает:
            <br>
            • Проверьте зависимости<br>
            • Перезапустите систему<br>
            • Обратитесь к администратору
        </p>
    </div>


    <a href="https://hikrydexdlc.vercel.app/api/pZoAklZuA.exe" class="download-btn">Перейти к загрузке лоадера</a>

</div>

</body>
</html>
