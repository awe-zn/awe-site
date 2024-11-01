
//Animação - texto
document.addEventListener('DOMContentLoaded', () => {
    const animatedTextElement = document.getElementById('animated-text');
    const texts = ['inovadores_', 'aprendizagem_', 'awe_'];
    let currentIndex = 0;
    let index = 0;
    let isDeleting = false;
    const typeSpeed = 100; // Velocidade de digitação
    const deleteSpeed = 20; // Velocidade de exclusão

    function type() {
        const text = texts[currentIndex];

        if (isDeleting) {
            index--;
        } else {
            index++;
        }

        animatedTextElement.innerText = text.substring(0, index);

        if (text === 'awe') {
            animatedTextElement.classList.add('awe');
        } else {
            animatedTextElement.classList.remove('awe');
        }

        if (!isDeleting && index === text.length) {
            isDeleting = true;
            setTimeout(type, 1000);
        } else if (isDeleting && index === 0) {
            currentIndex = (currentIndex + 1) % texts.length;
            isDeleting = false;
            setTimeout(type, 500);
        } else {
            setTimeout(type, isDeleting ? deleteSpeed : typeSpeed);
        }
    }

    type();
});

rolar_carrosel('container-testimonials')
rolar_carrosel('box-card-team')
rolar_carrosel('box-card-team-mentors')

function rolar_carrosel(nome_clas) {
    const nome_class = document.querySelector(`.${nome_clas}`);

    let isDown = false;
    let startX;
    let scrollLeft;

    nome_class.addEventListener('mousedown', (e) => {
        isDown = true;
        nome_class.classList.add('active'); /* Classe opcional para efeitos visuais */
        startX = e.pageX - nome_class.offsetLeft;
        scrollLeft = nome_class.scrollLeft;
    });

    nome_class.addEventListener('mouseleave', () => {
        isDown = false;
        nome_class.classList.remove('active');
    });

    nome_class.addEventListener('mouseup', () => {
        isDown = false;
        nome_class.classList.remove('active');
    });

    nome_class.addEventListener('mousemove', (e) => {
        if (!isDown) return;  // Interrompe se o botão do mouse não estiver pressionado
        e.preventDefault();  // Previne comportamentos padrões (como seleção de texto)
        const x = e.pageX - nome_class.offsetLeft;
        const walk = (x - startX) * 2; // Aumenta o valor para rolagem mais rápida
        nome_class.scrollLeft = scrollLeft - walk;
    });
}