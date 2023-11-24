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
	<div class="lineTop w-screen opacity-50 bottom-[calc(100vh*0.907)]"></div>
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

		<section class="text-center">
			<h1
				class="w-[calc(100vw*0.42604166)] text-[#2563EB] text-[80px] font-bold leading-[107px] bg-[url('/src/assets/vector2.png')] bg-no-repeat bg-contain bg-bottom ml-[calc(100vw*0.086458)]">
				Рекомендации.</h1>
			<div class="w-[calc(100vw*0.83125)] grid grid-cols-2 gap-x-[20px] mx-auto mt-5">
				<div class="w-[calc(100vw*0.410416666)] relative gap-y-5 grid">
					<h1 class="text-[70px] font-bold leading-[120px] text-[#2563EB] text-left">скоро закончится
					</h1>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[90px] rounded-[10px] bg-[#2563EB]">заказать</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар закончится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось</p>
									<p class="text-[15px] text-[#808080] font-normal">12 шт.</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">калорий</p>
									<p class="text-[15px] text-[#808080] font-normal">360 кал.</p>
								</section>
							</div>
						</div>
					</div>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[90px] rounded-[10px] bg-[#2563EB]">заказать</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар закончится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось</p>
									<p class="text-[15px] text-[#808080] font-normal">12 шт.</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">калорий</p>
									<p class="text-[15px] text-[#808080] font-normal">360 кал.</p>
								</section>
							</div>
						</div>
					</div>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[90px] rounded-[10px] bg-[#2563EB]">заказать</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар закончится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось</p>
									<p class="text-[15px] text-[#808080] font-normal">12 шт.</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">калорий</p>
									<p class="text-[15px] text-[#808080] font-normal">360 кал.</p>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="w-[calc(100vw*0.410416666)] grid gap-y-5">
					<h1 class="text-[70px] font-bold leading-[120px] text-[#2563EB] text-left">скоро испортятся
					</h1>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[75px] rounded-[10px] bg-[#2563EB]">удалить
									из списка</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар испортится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось дней</p>
									<p class="text-[15px] text-[#808080] font-normal">12</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось штук</p>
									<p class="text-[15px] text-[#808080] font-normal">35</p>
								</section>
							</div>
						</div>
					</div>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[75px] rounded-[10px] bg-[#2563EB]">удалить
									из списка</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар испортится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось дней</p>
									<p class="text-[15px] text-[#808080] font-normal">12</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось штук</p>
									<p class="text-[15px] text-[#808080] font-normal">35</p>
								</section>
							</div>
						</div>
					</div>
					<div
						class="relative w-[calc(100vw*0.410416666)] h-[calc(100vh*0.1509259259)] border border-dashed border-black rounded-[10px] pl-[22px]">
						<div
							class="rounded-full border-2 border-black border-dashed px-2 py-2 absolute right-[10px] top-[10px] w-[30px] h-[30px]">
							<h1 class="-translate-y-[5px] font-semibold">X</h1>
						</div>
						<div class="grid grid-cols-2">
							<div class="w-[385px] text-left">
								<h1 class="text-[40px] font-semibold">Кефир “Сквашино”</h1>
								<button
									class="mt-[8px] text-[25px] font-bold text-white py-[12px] px-[75px] rounded-[10px] bg-[#2563EB]">удалить
									из списка</button>
							</div>
							<div class="w-[338px] text-left pt-[calc(100vh*0.030555)] grid gap-y-[9px]">
								<p class="text-[20px] font-normal">в скором времени товар испортится</p>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось дней</p>
									<p class="text-[15px] text-[#808080] font-normal">12</p>
								</section>
								<section class="flex justify-between">
									<p class="text-[20px] font-normal" name="ost">осталось штук</p>
									<p class="text-[15px] text-[#808080] font-normal">35</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
</body>

</html>