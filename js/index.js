  // simples auth usando localStorage (NÃO SEGURO; só para protótipo)
  const registerForm = document.getElementById('register-form');
  const loginForm = document.getElementById('login-form');
  const msg = document.getElementById('msg');

  function getUsers(){
    return JSON.parse(localStorage.getItem('users') || '[]');
  }
  function saveUsers(users){ localStorage.setItem('users', JSON.stringify(users)); }

  registerForm.addEventListener('submit', e =>{
    e.preventDefault();
    const name = document.getElementById('reg-name').value.trim();
    const email = document.getElementById('reg-email').value.trim().toLowerCase();
    const pass = document.getElementById('reg-pass').value;
    if(!email || !pass){ msg.textContent = 'Preencha email e senha.'; return; }
    const users = getUsers();
    if(users.some(u => u.email === email)){ msg.textContent = 'Email já cadastrado.'; return; }
    users.push({ name, email, pass });
    saveUsers(users);
    msg.style.color = 'green';
    msg.textContent = 'Conta criada com sucesso. Você pode entrar abaixo.';
    registerForm.reset();
  });

  loginForm.addEventListener('submit', e =>{
    e.preventDefault();
    const email = document.getElementById('login-email').value.trim().toLowerCase();
    const pass = document.getElementById('login-pass').value;
    const users = getUsers();
    const user = users.find(u => u.email === email && u.pass === pass);
    if(!user){ msg.style.color = 'var(--vermelho)'; msg.textContent = 'Email ou senha incorretos.'; return; }
    // autentica
    localStorage.setItem('authenticated', 'true');
    localStorage.setItem('authUser', JSON.stringify({ name: user.name, email: user.email }));
    window.location.href = 'index.html';
  });

  // se já autenticado, redireciona direto
  if(localStorage.getItem('authenticated') === 'true'){
    window.location.href = 'index.html';
  }