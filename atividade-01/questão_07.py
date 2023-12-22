def somar(x, y):
    return x + y

def calcular_diferenca(x, y):
    return abs(x - y)

def calcular_produto(x, y):
    return x * y

def calcular_divisao(x, y):
    if y != 0:
        return x / y
    else:
        return "Erro: Divisão por zero."

numero_1 = float(input("Digite o primeiro número: "))
numero_2 = float(input("Digite o segundo número: "))

print("\nEscolha a opção:")
print("1- Soma de 2 números.")
print("2- Diferença entre 2 números (maior pelo menor).")
print("3- Produto entre 2 números.")
print("4- Divisão entre 2 números (o denominador não pode ser zero).")

opcao = input("Opção: ")

if opcao == '1':
    resultado = somar(numero_1, numero_2)
    print(f"A soma dos números é: {resultado}")
elif opcao == '2':
    resultado = calcular_diferenca(max(numero_1, numero_2), min(numero_1, numero_2))
    print(f"A diferença entre os números (maior pelo menor) é: {resultado}")
elif opcao == '3':
    resultado = calcular_produto(numero_1, numero_2)
    print(f"O produto dos números é: {resultado}")
elif opcao == '4':
    resultado = calcular_divisao(numero_1, numero_2)
    print(f"A divisão dos números é: {resultado}")
else:
    print("Opção inválida.")
