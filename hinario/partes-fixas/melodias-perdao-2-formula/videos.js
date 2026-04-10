document.addEventListener('DOMContentLoaded', () => {
    const modalElement = document.getElementById('exampleModal');
    const iframeYoutube = document.getElementById('youtube');
    
    // Inicializa o modal do Bootstrap 5 uma única vez
    const bootstrapModal = new bootstrap.Modal(modalElement);

    // DELEGAÇÃO DE EVENTOS: Escuta cliques em toda a página
    document.addEventListener('click', function(event) {
        // Verifica se o clique (ou o elemento pai do clique) tem o atributo data-dtm
        const btn = event.target.closest('[data-dtm]');

        if (btn) {
            event.preventDefault(); // Evita o pulo de página do href="#"

            // 1. Extrai os dados dos atributos
            const videoId = btn.getAttribute('data-dtm');
            const videoTitle = btn.getAttribute('title'); // Extrai o título para o evento
            
            // 2. Valida se o ID existe antes de prosseguir
            if (videoId) {
                // --- CAMADA DE DADOS (Data Layer) ---
                // Verifica se o dataLayer existe para evitar erros de console
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'view_video',
                    'video_title': videoTitle,
                    'video_id': videoId
                });
                // ------------------------------------

                const videoUrl = `https://www.youtube.com/embed/${videoId}?rel=0&autoplay=1`;
                iframeYoutube.setAttribute('src', videoUrl);
                
                // 3. Abre o modal
                bootstrapModal.show();
            }
        }
    });

    // LIMPEZA: Quando o modal for fechado, resetamos o iframe
    modalElement.addEventListener('hidden.bs.modal', () => {
        iframeYoutube.setAttribute('src', 'about:blank');
    });
});