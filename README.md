# Um exemplo de deploy no Heroko  

Existe um app configurado no Heroko, com o endereço http://edcesar-travis-deploy.herokuapp.com/  

## Após o respositório sofrer alguma alteração 
- O travis-ci é notificado 
- O travis-ci cria os ambiente descritos no .travis.yml
- Executa os testes
- caso ocorra falha nos testes, o processo terminal
- Caso os passem, o deploy é feito para o Heroku
