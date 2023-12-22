velocidade_limite = int(input("Digite a velocidade máxima permitida (em km/h): "))
velocidade_motorista = int(input("Digite a velocidade do motorista (em km/h): "))

if velocidade_motorista > velocidade_limite:
    diferenca_velocidade = velocidade_motorista - velocidade_limite

    if diferenca_velocidade <= 10:
        valor_multa = 50
        mensagem_multa = "Você ultrapassou em até 10km/h. Multa de R$ 50,00."
    elif 11 <= diferenca_velocidade <= 30:
        valor_multa = 100
        mensagem_multa = "Você ultrapassou de 11 a 30km/h. Multa de R$ 100,00."
    else:
        valor_multa = 200
        if velocidade_motorista >= 2 * velocidade_limite:
            mensagem_multa = "Você está pilotando um foguete? Acha que o Brian? Multa de R$ 1000,00 só para começar!"
        else:
            mensagem_multa = "Você ultrapassou mais de 30km/h. Multa de R$ 200,00."

    print(f"\n{mensagem_multa}")
else:
    print("\nVocê está dentro do limite de velocidade. Não há multa.")
