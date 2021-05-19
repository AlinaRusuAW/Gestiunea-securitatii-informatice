import random

chars = '+-/*!&$#@?=@<>abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'

number = int(input('Cite parole generam: '))
lenght = int(input('Lungimea parolei:'))

for x in range(number):
	password = ''

	for i in range(lenght):
		password += random.choice(chars)

	print(password)

	file = open('password.txt', 'a')
	file.write('\n' + password)
	file.close()