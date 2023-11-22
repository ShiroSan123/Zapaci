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

<body class="h-full">
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
			<a href="#" class="text-[40px] font-extrabold font-manrope -translate-y-4">
				Запасись
			</a>

			<!-- Menu Desktop -->
			<nav class="sm:hidden">
				<ul class="flex items-center gap-[20px]">
					<li>
						<a href="add.php?tag=1"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] after:scale-0 hover:after:scale-100 after:transition-transform">добавление</a>
					</li>
					<li>

						<a href="list.php?tag=2"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] after:scale-0 hover:after:scale-100 after:transition-transform">список</a>
					</li>
					<li>

						<a href="calc.php?tag=3"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] after:scale-0 hover:after:scale-100 after:transition-transform">калькулятор
						</a>
					</li>
					<li>

						<a href="recom.php?tag=4"
							class="font-manrope font-bold text-[25px] relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-[#2563EB] after:scale-0 hover:after:scale-100 after:transition-transform">рекомендации
						</a>
					</li>
				</ul>
			</nav>

			<!-- Actions -->
			<div class="flex items-center gap-[30px] md:hidden -translate-y-4">
				<a href="auth.php?log=2" class="flex items-center gap-1">
					<span class="font-bold text-[25px] leading-[22px]">вход</span>
				</a>
				<a href="auth.php?log=1" class="flex items-center gap-1">
					<span
						class="font-bold text-[25px] bg-[#2563EB] rounded-[50px] py-[9px] px-[15px] leading-[32px] text-white">регистрация</span>
				</a>
			</div>
		</header>

		<section class="mt-[244.5px] mx-auto text-center max-w-[1144px] max-h-[320px]">
			<p class="text-[25px]">более 1000+ магазинов доверяют нам</p>
			<h1 class="text-[100px] font-bold leading-[107px]">запаси еду с <span
					class="text-[#2563EB] bg-[url('/src/assets/vector.png')] bg-no-repeat bg-contain bg-bottom">запасись.</span>
			</h1>
			<p class="text-[20px] mt-8 w-[calc(100vw*0.43697)] mx-auto">надежный спутник в эффективном управлении
				продуктовыми запасами в зимний
				период,
				обеспечивающий комфорт и уверенность в любых условиях.</p>
			<div class="flex w-[calc(100vw*0.21875)] ml-[343px] mt-8 gap-5">
				<button
					class="mx-auto rounded-[10px] bg-black py-[calc(100vh*0.025)] px-[calc(100vw*0.0114583333)] text-white text-[30px] font-bold">добавление</button>
				<button
					class="mx-auto rounded-[10px] border-[1px] border-black py-[calc(100vh*0.025)] px-[calc(100vw*0.0114583333)] text-black text-[30px] font-bold">калькулятор</button>
			</div>
		</section>
	</section>
</body>

</html>