    document.getElementById('sugestaoForm').addEventListener('submit', function(e) {
            const nome = document.getElementById('nome_materia').value.trim();
            const descricao = document.getElementById('descricao').value.trim();
            const ano = document.getElementById('ano_sugerido').value;
            
            if (!nome || !descricao || !ano) {
                alert('Por favor, preencha todos os campos!');
                e.preventDefault();
                return;
            }
            });