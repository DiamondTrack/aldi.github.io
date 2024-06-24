const quoteIndices = {
    quotes: 0,
    motivation: 0,
    diary: 0
};

function showContent(tabName) {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.content');

    tabs.forEach(tab => tab.classList.remove('active'));
    contents.forEach(content => {
        if (content.id === tabName) {
            content.style.display = 'block';
            setTimeout(() => {
                content.style.opacity = '1';
            }, 1300);
        } else {
            content.style.opacity = '0';
            setTimeout(() => {
                content.style.display = 'none';
            }, 1200);
        }
    });

    document.querySelector(`.tab[data-tab="${tabName}"]`).classList.add('active');
}

function nextQuote(tabName) {
    const contents = document.querySelectorAll('.content');
    const quotes = contents[Object.keys(quoteIndices).indexOf(tabName)].querySelectorAll('.quote');

    quoteIndices[tabName] = (quoteIndices[tabName] + 1) % quotes.length;
    showQuote(tabName);
}

function prevQuote(tabName) {
    const contents = document.querySelectorAll('.content');
    const quotes = contents[Object.keys(quoteIndices).indexOf(tabName)].querySelectorAll('.quote');

    quoteIndices[tabName] = (quoteIndices[tabName] - 1 + quotes.length) % quotes.length;
    showQuote(tabName);
}

function showQuote(tabName) {
    const contents = document.querySelectorAll('.content');
    const quotes = contents[Object.keys(quoteIndices).indexOf(tabName)].querySelectorAll('.quote');

    quotes.forEach((quote, index) => {
        if (index === quoteIndices[tabName]) {
            quote.style.display = 'block';
            setTimeout(() => {
                quote.style.opacity = '1';
            }, 1200);
        } else {
            quote.style.opacity = '0';
            setTimeout(() => {
                quote.style.display = 'none';
            }, 1300);
        }
    });
}