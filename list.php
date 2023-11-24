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
	<div class="z-10 lineLeft h-screen opacity-50 left-[calc(100vw*0.084375)]"></div>
	<div class="z-10 lineLeft opacity-50 left-[calc(100vw*0.3265625)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]">
	</div>
	<div class="z-10 lineLeft opacity-50 left-[calc(100vw*0.5)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]"></div>
	<div class="z-10 lineLeft opacity-50 left-[calc(100vw*0.6734375)] h-[calc(100vh*0.813888)] top-[calc(100vh*0.093)]">
	</div>
	<div class="z-10 lineLeft h-screen opacity-50 left-[1758px]"></div>
	<div class="z-10 lineTop w-screen opacity-50 top-[calc(100vh*0.90740)]"></div>

	<section class="h-full">
		<!-- Header -->
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

		<!-- List of products -->
		<section class="text-center">
			<h1
				class="ml-[calc(100vw*0.086458)] w-[818px] text-[#2563EB] text-[80px] font-bold leading-[107px] bg-[url('/src/assets/vector2.png')] bg-no-repeat bg-contain bg-bottom">
				Список товаров.</h1>
			<div id="listProduct" class="w-[1316px] grid grid-cols-5 gap-x-[67px] gap-y-[18px] mx-auto mt-5">
				<?php
					$con = mysqli_connect('127.0.0.1','root','','Zapaci');
					$query = mysqli_query($con, "SELECT * FROM product");
					$num = mysqli_num_rows($query);
	 				for($i=0;$i<$num;$i++){	
	 				$stroka = $query->fetch_assoc();
				?>
				<div class="w-[210px] h-[254px] border-dashed border border-[#5E5E5E80] rounded-[5px]"
					onclick="viewProduct()">
					<div
						class="w-full h-[210px] bg-[url('/src/assets/products/<?php echo $i ?>.jpg')] bg-no-repeat bg-cover bg-center rounded-[5px]">
					</div>
					<div class="flex pl-[7px] mt-[5px] justify-between pr-[22px]">
						<h1 class="text-[20px] font-bold">
							<?php echo $stroka['Product'] ?>
						</h1>
						<ul class="">
							<li class="text-[10px]">
								<?php echo $stroka['Cal'] ?>
							</li>
							<li class="text-[10px]">срок годности:
								<?php echo $stroka['Life'] ?>
							</li>
						</ul>
					</div>
				</div>
				<?php } ?>
			</div>
			<div id="mainProduct"
				class="pl-6 pt-10 pb-[30px] w-[1316px] grid grid-cols-5 gap-x-[67px] gap-y-[18px] mx-auto mt-5 border border-dashed border-[#AEAEAE]"
				style="display: none;">
				<div class="3/5">
					<div
						class="w-[calc(100vw*0.3942708)] h-[calc(100vh*0.19907407)] bg-[url('/src/assets/products/milk.png')] bg-no-repeat bg-cover">

					</div>
					<h1 class="text-[60px] font-bold w-3/5">Milk</h1>
					<div class="flex justify-between w-3/5">
						<div class="grid gap-y-[26px] text-left w-[calc(100vw*0.125)]">
							<p class="text-[20px] font-medium">Название магазина</p>
							<p class="text-[20px] font-medium">Наименование товара</p>
							<p class="text-[20px] font-medium">Срок годности в днях</p>
							<p class="text-[20px] font-medium">Количества товара в кг. или в штуках</p>
						</div>
						<div class="grid gap-y-[26px] text-right w-[calc(100vw*0.125)]">
							<p class="text-[20px] text-[#343537]">GetLet</p>
							<p class="text-[20px] text-[#343537]">Гречка длиннозерная</p>
							<p class="text-[20px] text-[#343537]">620 дней</p>
							<p class="text-[20px] text-[#343537]">3 пакета</p>
						</div>
					</div>
				</div>
			</div>
			<button onclick="viewAdd()"
				class="fixed rounded-[30px] text-[30px] text-white font-bold right-[calc(100vw*0.0894166)] bottom-[calc(100vh*0.111111)] border-2 border-black border-dashed py-[8px] px-[27px] bg-[#2563EB]">
				добавить товар
			</button>
		</section>

		<!-- Add product -->
		<section style="display: none;" id="blockAdd" class="">
			<div class="w-screen h-screen bg-black opacity-[78%] fixed top-0" onclick="invisAdd()">

			</div>
			<div
				class="opacity-100 rounded-[20px] pl-[calc(100vw*0.055729)] w-[calc(100vw*0.6015625)] h-[calc(100vh*0.675925)] fixed border border-black border-dashed top-[calc(100vh*0.2120370)] left-[calc(100vw*0.19895833333)] bg-white">
				<h1
					class="w-[644px] text-[#2563EB] text-[60px] font-semibold leading-[107px] bg-[url('/src/assets/vector2.png')] bg-no-repeat bg-contain bg-bottom">
					Добавление товаров.</h1>
				<div class="flex pt-[56px]">
					<div class="w-[calc(100vw*0.3098958)]">
						<form action="server.php" method="POST" class="gap-y-[30px] grid" enctype="multipart/form-data">
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Название магазина</label>
								<input
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="text" name="corp">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Наименование товара<span
										class="text-[20px] text-red-600">*</span></label>
								<input required
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="text" name="product">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Срок годности в днях<span
										class="text-[20px] text-red-600">*</span></label>
								<input required
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="number" pattern="[0-9]+" name="life">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Количества товара в кг.</label>
								<input
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="number" pattern="[0-9]+" name="count1">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Количества товара в штуках</label>
								<input
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="number" pattern="[0-9]+" name="count2">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Количество калорий на товар<span
										class="text-[20px] text-red-600">*</span></label>
								<input required
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="number" pattern="[0-9]+" name="cal">
							</div>
							<div class="justify-between flex">
								<label for="corp" class="text-[20px] font-semibold">Количество калорий на товар<span
										class="text-[20px] text-red-600">*</span></label>
								<input required
									class="mt-[3px] h-[24px] w-[calc(100vw*0.144270833)] rounded-[5px] border border-[#808080]"
									type="file" name="image">
							</div>
							<button name="addProduct"
								class="text-white py-[2px] px-[96px] bg-[#2563EB] w-[277px] h-[46px] rounded-[30px] ml-auto">
								далее
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</section>

	<script src="src/js/main.js"></script>
</body>

</html>