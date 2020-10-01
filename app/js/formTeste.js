export default function formTeste() {
  const formButton = document.querySelectorAll(`.teste .wpcf7-list-item`);

  formButton.forEach((button) => {
    const checkBox = document.createElement('div');
    checkBox.classList.add('my-checkbox');

    button.appendChild(checkBox);
  });

  formButton.forEach((button) => {
    button.addEventListener('click', () => {
      formButton.forEach((button2) => {
        button2.classList.remove('ativo');
      });

      button.classList.add('ativo');
    });
  });
}
