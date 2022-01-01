# Comandos if
x = int(input("Please enter an integer: ")) # Se você está comparando o mesmo valor com várias constantes, ou verificando por tipos ou atributos específicos, você também pode achar a instrução match útil. 
if x < 0:
    x = 0
    print("negative changed to zero")
elif x == 1:
    print("single")
else:
    print("more")

# Comandos for Measure some strings:
words = ["cat", "window", "defenstrate"]
for w in words:
    print(w, len(W))

# Create a sample collection
users = {'Hans': 'active', 'Éléonore': 'inactive', '景太郎': 'active'}

# Strategy:  Iterate over a copy
for user, status in users.copy().items():
    if status == 'inactive':
        del users[user]

# Strategy:  Create a new collection
active_users = {}
for user, status in users.items():
    if status == 'active':
        active_users[user] = status
