minimo = float('inf')
maximo = float('-inf')

for _ in range(20):
    numero = int(input("Digite um número inteiro: "))
    
    minimo = min(minimo, numero)
    maximo = max(maximo, numero)

print(f"O menor valor fornecido é: {minimo}")
print(f"O maior valor fornecido é: {maximo}")
