def soma_n(n):
    soma = 0
    for i in range(1, n + 1):
        soma += i
    return soma

n = int(input("Digite um número: "))

resultado = soma_n(n)
print(f"A soma dos números de 1 a {n} é: {resultado}")