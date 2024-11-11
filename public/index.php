<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>G1 Frontend</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script defer src="/public/assets/scripts/index.js"></script>
</head>

<body class="bg-slate-800 space-y-4">
	<header class="px-[10%] py-4 bg-red-800/90 text-white flex justify-center">
		<a href="/" class="font-bold text-lg uppercase tracking-widest">Início</a>
	</header>

	<main class="px-[10%] mb-4">
		<div class="news-container grid grid-cols-4 gap-4 ">
			<?= $this->render("components/news-group", ["data" => $data]); ?>
		</div>

		<button onclick="loadLatest(event, <?= $state ?? '\'\''; ?>, <?= $data->nextPage; ?>);"
			class="bg-red-800/90 uppercase text-white tracking-widest rounded-md px-4 py-2 my-4 mx-auto block disabled:bg-stone-800 bg-opacity-10">Carregar
			mais</button>
	</main>
</body>

</html>
