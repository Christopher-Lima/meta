temperatura_celsius = float(input("Digite a temperatura em graus Celsius: "))

if temperatura_celsius <= 18:
    tipo_clima = "frio"
    mensagem = "Está mais frio que o inverno em Curitiba!"
elif 19 <= temperatura_celsius <= 23:
    tipo_clima = "agradável"
    mensagem = "A temperatura está melhor que um dia comum em Salvador."
elif 24 <= temperatura_celsius <= 35:
    tipo_clima = "quente"
    mensagem = "O calor está parecido com um dia de verão em Fortaleza."
else:
    tipo_clima = "muito quente"
    mensagem = "Parabéns, você chegou em Macapá."

print(f"\nO clima é {tipo_clima}. {mensagem}")
