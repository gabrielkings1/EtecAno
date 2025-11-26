  function validarFormulario() {
            const nome = document.querySelector('input[name="nome"]').value.trim();
            const email = document.querySelector('input[name="email"]').value.trim();
            const senha = document.querySelector('input[name="senha"]').value;

            if (!nome) {
                alert('Por favor preencha o seu nome.');
                return false;
            }

            if (!validarEmail(email)) {
                alert('Por favor informe um e-mail válido.');
                return false;
            }

            if (senha.length < 6) {
                alert('A senha deve ter pelo menos 6 caracteres');
                return false;
            }

            // all good — allow submit
            return true;
        }
        
        function validarEmail(email) {
            // basic regex for common email validation
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }