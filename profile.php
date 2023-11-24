<?php 
include('server.php');
$tag = $_GET['tag'];
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

						<a href="<?php if(isset($_SESSION['Phone'])){ ?>list.php?tag=1<?php } else { ?>auth.php?log=1<?php } ?>"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 1) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">список</a>
					</li>
					<li>

						<a href="<?php if(isset($_SESSION['Phone'])){ ?>https://goo.su/pjwJ<?php } else { ?>auth.php?log=1<?php } ?>"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 4) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">статистика
						</a>
					</li>
					<li>

						<a href="<?php if(isset($_SESSION['Phone'])){ ?>recom.php?tag=3<?php } else { ?>auth.php?log=1<?php } ?>"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 3) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">рекомендации
						</a>
					</li>
					<li>

						<a href="<?php if(isset($_SESSION['Phone'])){ ?>calc.php?tag=2<?php } else { ?>auth.php?log=1<?php } ?>"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] <?php if($tag == 2) { ?>scale-0 text-[#2563EB]<?php } else {?>after:scale-0<?php }?> hover:after:scale-100 after:transition-transform">прогноз
						</a>
					</li>
				</ul>
			</nav>

			<!-- Actions -->
			<!-- Check for auth -->
			<?php if(isset($_SESSION['Phone'])){ ?>
			<div class="flex items-center gap-[30px] md:hidden -translate-y-4">
				<a href="profile.php" class="flex items-center gap-1">
					<span
						class="font-bold text-[25px] bg-[#2563EB] rounded-[50px] py-[9px] px-[15px] leading-[32px] text-white">
						<?php echo $stroka['Name'] ?>
					</span>
				</a>
			</div>
			<?php } else { ?>
			<div class="flex items-center gap-[30px] md:hidden -translate-y-4">
				<a href="auth.php?log=2" class="flex items-center gap-1">
					<span class="font-bold text-[25px] leading-[22px]">вход</span>
				</a>
				<a href="auth.php?log=1" class="flex items-center gap-1">
					<span
						class="font-bold text-[25px] bg-[#2563EB] rounded-[50px] py-[9px] px-[15px] leading-[32px] text-white">регистрация</span>
				</a>
			</div>
			<?php }?>
		</header>

		<section class="w-[1551px] mx-auto">
			<h1
				class="w-[420px] text-[#2563EB] text-[80px] font-bold leading-[107px] bg-[url('/src/assets/vector2.png')] bg-no-repeat bg-contain bg-bottom">
				Профиль</h1>
			<div class="flex mt-6">
				<!-- Left column -->
				<div class="w-[600px]">
					<h1 class="text-[40px] font-bold">Привет,
						<?php echo $stroka['Name'] ?>!
					</h1>
					<p class="text-[20px] mt-6">возвращением, надеюсь, ты сегодня хорошо себя чувствуешь</p>
					<div class="flex mt-2">
						<div
							class="w-[140px] h-[140px] rounded-full bg-[#2563EB] bg-[url('/src/assets/Icons/Icon.png')] bg-no-repeat bg-cover">
						</div>
						<div class="pl-5 pt-6">
							<h1 class="text-[16px]">Верхоянск</h1>
							<p class="text-[16px]">На <span class="text-[#2563EB]">запасись</span> с 21 ноября 2023</p>
						</div>
					</div>
					<h1 id="personBtn" class="text-[20px] text-[#2563EB] w-[160px] mt-4" onclick="personInfo()">
						Личные данные</h1>
					<h1 id="shopBtn" class="text-[20px] w-[180px] mt-4" onclick="shopInfo()">
						Данные магазина</h1>
					<a href="logout.php" class="text-red-600 underline text-[20px] mt-2">Выйти из аккаунта</a>
				</div>
				<!--Right column  -->
				<!-- Personal information -->
				<div id="personId"
					class="w-[856px] pb-[50px] border-black border border-dashed rounded-lg pl-[26px] pt-[33px]">
					<h1 class="text-[32px] font-medium">Личные данные</h1>
					<div class="flex h-[calc(100vh*0.391111111111)] w-full mt-5">
						<div class="border w-1/4 h-full grid gap-y-[25px]">
							<p class="text-[16px] text-[#4D4D4D]">Имя</p>
							<p class="text-[16px] text-[#4D4D4D]">Телефон</p>
							<p class="text-[16px] text-[#4D4D4D]">Город</p>
							<p class="text-[16px] text-[#4D4D4D]">E-mail</p>
							<p class="text-[16px] text-[#4D4D4D]">ИНН</p>
							<p class="text-[16px] text-[#4D4D4D]">СНИЛС</p>
							<p class="text-[16px] text-[#4D4D4D]">Серия Паспорта РФ</p>
							<p class="text-[16px] text-[#4D4D4D]">Номер Паспорта РФ</p>

						</div>
						<div class="border w-2/4 h-full grid gap-y-[25px]">
							<p class="text-[16px] text-[#4D4D4D]">Ренат Харлампьев</p>
							<p class="text-[16px] text-[#4D4D4D]">+ 7 (228) 999-55-12</p>
							<p class="text-[16px] text-[#4D4D4D]">Верхоянск</p>
							<p class="text-[16px] text-[#4D4D4D]">shiruisan2005@gmail.com</p>
							<p class="text-[16px] text-[#4D4D4D]">509876567897678911111123</p>
							<p class="text-[16px] text-[#4D4D4D]">160 52-45-67</p>
							<p class="text-[16px] text-[#4D4D4D]">9818</p>
							<p class="text-[16px] text-[#4D4D4D]">821585</p>
						</div>
						<div class="border w-1/4 h-full grid gap-y-[25px]" style="display: none;">
							<p class="text-[16px] text-[#2563EB] underline">Редактировать</p>
							<p class="text-[16px] text-[#2563EB] underline">Изменить</p>
							<p class="text-[16px] text-[#2563EB] underline">Указать</p>
							<p class="text-[16px] text-[#2563EB] underline">Редактировать</p>
							<p class="text-[16px] text-[#2563EB] underline">Не подтверждено</p>
							<p class="text-[16px] text-[#2563EB] underline">Не подтверждено</p>
							<p class="text-[16px] text-[#2563EB] underline">Не подтверждено</p>
							<p class="text-[16px] text-[#2563EB] underline">Не подтверждено</p>
						</div>
					</div>
				</div>
				<!-- Shop information -->
				<div id="shopId"
					class="w-[856px] pb-[50px] border-black border border-dashed rounded-lg pl-[26px] pt-[33px]"
					style="display: none;">
					<h1 class="text-[32px] font-medium">Данные магазина</h1>
					<div class="flex h-[calc(100vh*0.391111111111)] w-full mt-5">
						<div class="border w-1/4 h-full grid gap-y-[25px]">
							<p class="text-[16px] text-[#4D4D4D]">Название</p>
							<p class="text-[16px] text-[#4D4D4D]">Город</p>
							<p class="text-[16px] text-[#4D4D4D]">Адрес</p>
							<p class="text-[16px] text-[#4D4D4D]">Контакты</p>
							<p class="text-[16px] text-[#4D4D4D]">Номер закупщика</p>

						</div>
						<div class="border w-2/4 h-full grid gap-y-[25px]">
							<p class="text-[16px] text-[#4D4D4D]">У Рената</p>
							<p class="text-[16px] text-[#4D4D4D]">Верхоянск</p>
							<p class="text-[16px] text-[#4D4D4D]">с. Пригородное ул. Ольховая 7</p>
							<p class="text-[16px] text-[#4D4D4D]">+7 (999) 878-67-12</p>
							<p class="text-[16px] text-[#4D4D4D]">+7 (999) 878-67-15</p>
						</div>
						<div class="border w-1/4 h-full grid gap-y-[25px]" style="display: none;">
							<p class="text-[16px] text-[#2563EB] underline">Редактировать</p>
							<p class="text-[16px] text-[#2563EB] underline">Изменить</p>
							<p class="text-[16px] text-[#2563EB] underline">Указать</p>
							<p class="text-[16px] text-[#2563EB] underline">Редактировать</p>
							<p class="text-[16px] text-[#2563EB] underline">Редактировать</p>
						</div>
					</div>
				</div>
			</div>

			<script src="src/js/main.js"></script>
		</section>
	</section>
</body>

</html>