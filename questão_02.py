def fibonacci(n):
    fib_sequence = [1, 1]
    while len(fib_sequence) < n:
        fib_sequence.append(fib_sequence[-1] + fib_sequence[-2])
    return fib_sequence

n = 20

fibonacci_sequence = fibonacci(n)
print(f"Os primeiros {n} termos da sequência de Fibonacci são: {fibonacci_sequence}")
