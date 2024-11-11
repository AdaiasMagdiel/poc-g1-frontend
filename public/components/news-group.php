<?php foreach ($data->news as $news): ?>
<div class="bg-red-800/90 rounded-md overflow-hidden p-2">
	<a href="<?= $news->url ?>" class="overflow-hidden rounded-md mb-2 cursor-pointer block">
		<picture class="aspect-[540/304] bg-stone-600 w-full block">
			<img class="w-full" src="
		<?= ($news->images['S'] ?? [])['url'] ?? 'https://picsum.photos/540/304' ?>">
		</picture>
		<div class="bg-black/30 rounded-b-md py-2 px-1">
			<h1 class="text-white font-bold text-[14px] line-clamp-2 mb-2 leading-none">
				<?= $news->title ?>
			</h1>
		</div>
	</a>

	<p class="text-white leading-none line-clamp-4 mb-2">
		<?= $news->recommendationSummary ?>
	</p>
</div>
<?php endforeach ?>
