function createLoadButton(state, page) {
	const button = document.createElement("button");

	button.appendChild(document.createTextNode("Carregar mais"));
	button.addEventListener(
		"click",
		async (event) => await loadLatest(event, state, page),
	);
	button.classList.add(
		"bg-red-800/90",
		"uppercase",
		"text-white",
		"tracking-widest",
		"rounded-md",
		"px-4",
		"py-2",
		"my-4",
		"mx-auto",
		"block",
		"disabled:bg-stone-800",
		"bg-opacity-10",
	);

	return button;
}

async function fetchLatest(state, page) {
	const res = await fetch(`/api/latest?state=${state}&page=${page}`);
	const html = await res.text();

	return html;
}

async function loadLatest(event, state, page) {
	const container = document.querySelector(".news-container");

	event.currentTarget.disabled = true;
	event.currentTarget.innerText = "Carregando...";

	const res = await fetchLatest(state, page);
	container.innerHTML += res;

	event.target.remove();
	container.parentElement.appendChild(createLoadButton(state, page + 1));
}
