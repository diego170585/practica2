imagenes = ['im1','im2','im3']
lista = []
i = 0
while i < 3:
    j = 0
    while j < 3:
        print('escriba una coordenada:')
        x1 = int(input())
        y1 = int(input())
        print('')
        if j == 0:
            tupla1 = (x1,y1)
        elif j == 1:
            tupla2 = (x1,y1)
            while(tupla1 == tupla2):
                print('la tupla 1 ', tupla1, ' es igual a la tupla 2', tupla2, ': cambie la tupla 2')
                x1 = int(input())
                y1 = int(input())
                tupla2 = (x1, y1)
        else:
            tupla3 = (x1,y1)
            while tupla1 == tupla3 or tupla2 == tupla3:
                if tupla1 == tupla3:
                    print('la tupla 1', tupla1, ' es igual a la tupla 3', tupla3, ': cambie la tupla 3')
                    x1 = int(input())
                    y1 = int(input())
                    tupla3 = (x1, y1)
                if tupla2 == tupla3:
                    print('la tupla 2', tupla2, ' es igual a la tupla 3', tupla3, ': cambie la tupla 3')
                    x1 = int(input())
                    y1 = int(input())
                    tupla3 = (x1, y1)
        j = j + 1
    rs = imagenes[i] +' '+ str(tupla1) + str(tupla2) + str(tupla3)
    lista.append(rs)
    i = i + 1
print(lista)

