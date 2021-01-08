<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>World Vision</title>
    <style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

section {
	position: relative;
	width: 100%;
	height: 100vh;
	display: flex;
}

section .imgBx {
	position: relative;
	width: 50%;
	height: 100%;
}

section .imgBx:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(225deg, #e91e63, #03a9f4);
	z-index: 1;
	mix-blend-mode: screen;
}

section .imgBx img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

section .contentBx {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 50%;
	height: 100%;
}

section .contentBx .formBx {
	width: 50%;
}

section .contentBx .formBx h2 {
	color: #607d8b;
	font-weight: 400;
	font-size: 1.75em;
	margin-bottom: 30px;
	display: inline-block;
	letter-spacing: 1px;
}

section .contentBx .formBx .inputBx {
	margin-bottom: 20px;
}

section .contentBx .formBx .inputBx span {
	font-size: 16px;
	margin-bottom: 5px;
	display: inline-block;
	color: #607d8b;
	font-weight: 400;
	letter-spacing: 1px;
}

section .contentBx .formBx .inputBx input {
	width: 100%;
	padding: 10px 20px;
	outline: none;
	font-weight: 400;
	border: 1px solid #607d8b;
	font-size: 16px;
	letter-spacing: 1px;
	color: #607d8b;
	background: transparent;
	border-radius: 30px;
}

section .contentBx .formBx .inputBx a {
	color: #ff4584;
}

section .contentBx .formBx .inputBx input[type="button"] {
	background: #ff4584;
	color: #fff;
	outline: none;
	border: none;
	font-weight: 700;
	text-transform: uppercase;
	margin-top: 10px;
	cursor: pointer;
	transition: 0.5s ease;
    font-size: 20px;
}

section .contentBx .formBx .inputBx input[type="button"]:hover {
	background: #f53677;
}

section .contentBx .formBx .remember {
	margin-bottom: 10px;
	color: #607d8b;
	font-weight: 400;
	font-size: 16px;
}

section .contentBx .formBx .remember input[type="checkbox"] {
	margin-right: 10px;
	background: transparent;
}

section .contentBx .formBx .remember p {
	color: #607d8b;
}

section .contentBx .formBx .remember p a {
	color: #ff4584;
}

@media screen and (max-width: 780px) {
	section .imgBx {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	section .contentBx {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 100%;
		z-index: 1;
	}
	section .contentBx .formBx {
		width: 100%;
		padding: 40px;
		background: rgba(255, 255, 255, 0.8);
		margin: 40px 80px;
		border-radius: 10px;
	}
}

    </style>
</head>

<body>
	<section>
		<div class="imgBx">
			<img src="https://picsum.photos/id/348/800" alt="Login background image">
		</div>
		<div class="contentBx" style="text-align: center">
			<div class="formBx">
                <div>
                    <a class="navbar-brand" href="#"
                      ><img src="{{asset('website/assets/images/logo.svg')}}" alt=""
                    /></a>
                  </div>
                  <br>
                  <hr><hr>
                  <br>
                <h2>Welcome To the world of news</h2>
                <br>
                <hr><hr>
                <br>
                <h2>مرحبا بك في عالم الاخبار</h2>
				<form>
					<div class="inputBx">
                        <a href="{{route('mainPage')}}" >
                        <input type="button" value="Start أبدا">
                        </a>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>

</html>
