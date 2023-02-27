<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Admitracao</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<style>

		@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200&display=swap');

	body{
    margin: 0;
	font-family: 'Noto sans', sans-serif;
	}

	.main-login{
		width: 100vw;
		height: 100vh;
		background: black;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.left-login{
		width: 50vw;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;

	}

	.left-login > h1 {
		color: greenyellow;

	}

	.right-login{
		width: 50vw;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.card-login{
    width: 60%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	padding: 30px 35px;
    background: #2f2841;
	border-radius: 20px;
	box-shadow: 0px 10px 40px #00000056;

	}

	.card-login > h1{
     color: #00ff88;
	 font-weight: 800;
	 margin: 0;


	}

	.textfield{
	width: 100%;
	display: flex;
	flex-direction: column;
    align-items: flex-start;
	justify-content: center;
	margin: 10px 0px;

	}

	.textfield > input{
		width: 100%;
        border: none;
        border-radius: 10px;
        padding: 15px;
        background: #514869;
		color: #f0ffffde;
		font-size: 12pt;
		box-shadow: 0px 10px 40px #00000056;
		outline: none;
		box-sizing: border-box;

    } 

	.textfield > label{
		color: #f0ffffde;
        margin-bottom: 10px;


	}

.textfield > input::placeholder{
color: #f0ffff94;

}

.btn-login{
	width: 60%;
	padding: 16px 0px;
	margin: 25px;
	border: none;
	background-color: #00ff88;
	border-radius: 8px;
	outline: none;
	text-transform: uppercase;
	font-weight: 800;
	letter-spacing: 3px;
	color: #2b134b;
	cursor: pointer;
	box-shadow: 0px 10px 40px -12px #00ff8052;


}

@media only screen and (max-width: 950px){
	.card-login{
     width: 85%;
	}

}

@media only screen and (max-width: 600px){
	.main-login{
     flex-direction: column;
	}
	.left-login > h1{
		display: none;

	}
	.left-login{
		width: 100%;
heig
	}

}




		
	</style>
<div class="main-login">
	<div class="left-login">
		<h1>FAÇA LOGIN<br>ÁREA GERENTE</h1>
		<img src="gerente.svg">
	</div>
<div class="right-login">
	<div class="card-login">
		<div class="textfield">
			<label for="usuario">USUARIO</label>
			<input type="text" name="usuario" placeholder="usuário">
		</div>
		<div class="textfield">
			<label for="senha">SENHA</label>
			<input type="password" name="senha" placeholder="senha">
		</div>
<button class="btn-login">LOGIN</button>




       </div>
   </div>
</div>
	

	
</body>
</html>