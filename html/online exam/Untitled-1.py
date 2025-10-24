word = input("enter the string")
first_char = word[0]
result = first_char + word[1:].replace(first_char, '$')
print("result:",result)
