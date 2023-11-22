<?php 
	$tag = $_GET['tag'];
	$log = $_GET['log'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Links -->
	<link rel="stylesheet" href="src/css/style.css">
	<style>
		.lineTop {
			text-align: center;
			border-top: 1px dashed #5E5E5E80;
			height: 18px;
			position: absolute;
		}

		.lineLeft {
			text-align: center;
			border-left: 1px dashed #5E5E5E80;
			width: 18px;
			position: absolute;
		}
	</style>
</head>

<body class="relative h-full">
	<div class="lineTop w-screen opacity-50 top-[calc(100vh*0.092592)]"></div>
	<div class="lineLeft h-screen opacity-50 left-[calc(100vw*0.084375)]"></div>
	<div class="lineLeft opacity-50 left-[calc(100vw*0.3265625)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]">
	</div>
	<div class="lineLeft opacity-50 left-[calc(100vw*0.5)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]"></div>
	<div class="lineLeft opacity-50 left-[calc(100vw*0.6734375)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]">
	</div>
	<div class="lineLeft h-screen opacity-50 left-[1758px]"></div>
	<div class="lineTop w-screen opacity-50 top-[calc(100vh*0.90740)]"></div>

	<section class="h-full">
		<header class="flex justify-between max-w-[1416px] mx-auto pt-[37px]">
			<!-- Logo -->
			<a href="index.php" class="text-[40px] font-extrabold font-manrope -translate-y-4">
				Запасись
			</a>

			<!-- Menu Desktop -->
			<nav class="sm:hidden">
				<ul class="flex items-center gap-[20px]">
					<li>

						<a href="list.php?tag=1"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 1) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">список</a>
					</li>
					<li>

						<a href="calc.php?tag=2"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 2) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">калькулятор
						</a>
					</li>
					<li>

						<a href="recom.php?tag=3"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 3) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">рекомендации
						</a>
					</li>
				</ul>
			</nav>
		</header>

		<?php if($log == 1){ ?>
		<section class="text-center mx-auto w-[653px] h-[800px] border border-black rounded-[10px]">
			<div class="w-[232px] h-[137px] bg-[url('/src/assets/icons/logo.png')] bg-no-repeat mx-auto mt-[30px]">
			</div>
			<h1 class="leading-[54px] text-[70px] font-extrabold"><span class="text-[#121BFF]">запас</span>ись<span
					class="text-[#121BFF]">.</span></h1>
			<p class="text-[30px]">Регистрация</p>
			<p class="text-[30px]">Есть аккаунт? <a href="auth.php?log=2" class="text-[#121BFF]">Войдите</a>
			</p>
			<form action="server.php" method="POST" class="">
				<input type="text" class="w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Фамилия" name="Surname" required>
				<input type="text" class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Имя" required name="Name">
				<input type="text" class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Отчество" name="Patronymic">
				<input type="text" class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Компания" name="Corp">
				<input type="text" class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Номер телефона" required name="Phone">
				<input type="password"
					class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Пароль" required name="Pass1">
				<input type="password"
					class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Повторите пароль *" required name="Pass2">
				<button
					class="mt-[12px] px-[75px] py-[5px] rounded-[50px] text-white text-[32px] font-bold bg-[#2563EB]"
					name="reg_user">далее</button>
			</form>
		</section>
		<?php } elseif($log == 2) { ?>
		<section class="text-center mx-auto w-[653px] h-[800px] border border-black rounded-[10px]">
			<div class="w-[232px] h-[137px] bg-[url('/src/assets/icons/logo.png')] bg-no-repeat mx-auto mt-[30px]">
			</div>
			<h1 class="leading-[54px] text-[70px] font-extrabold"><span class="text-[#121BFF]">запас</span>ись<span
					class="text-[#121BFF]">.</span></h1>
			<p class="text-[30px]">Авторизация</p>
			<p class="text-[30px]">Нет аккаунта? <a href="auth.php?log=1" class="text-[#121BFF]">Зарегистрируйтесь</a>
			</p>
			<form action="server.php" method="POST" class="mt-[117px]">
				<input type="text" class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Номер телефона" required name="Phone">
				<input type="password"
					class="mt-[11px] w-[535px] h-[49px] rounded-[10px] border border-[#BCBCBC] pl-[18px]"
					placeholder="Пароль" required name="Pass">
				<button class="mt-8 px-[75px] py-[5px] rounded-[50px] text-white text-[32px] font-bold bg-[#2563EB]"
					name="login_user">далее</button>
			</form>
		</section>
		<?php } ?>
	</section>
</body>

</html>