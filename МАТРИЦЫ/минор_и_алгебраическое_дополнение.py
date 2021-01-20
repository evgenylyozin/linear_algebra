""" 
* Определитель равен сумме произведений
* элементов некоторого ряда на соответствующие
* им алгебраические дополнения

* Минором элемента a ij определителя n‐го порядка называется опре-
* делитель ( n -1 ) -го порядка, полученный из исходного путем вычерки-
* вания строки и столбца, на пересечении которых стоит данный эле-
* мент.

* Алгебраическим дополнением элемента a ij определителя называется
* минор, взятый со знаком «плюс», если сумма ( i + j ) — четное число,
* и со знаком «минус», если эта сумма начетная.
"""

#Найдём минор и алгебраическое дополнение любого элемента квадратной матрицы
#4-го порядка
twodmatrix=[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]]
for i in range(0,4):
    for j in range(0,4):
        twodmatrix[i][j] = int(input())

for i in range(0,4):
    for j in range(0,4):
        print(f"{twodmatrix[i][j]}",end = " ")
    print("\n")

position_i = int(input())
position_j = int(input())
sum_position = position_i+position_j

del twodmatrix[position_i-1]

for i in range(0,3):
    del twodmatrix[i][position_j-1]

for i in range(0,3):
    for j in range(0,3):
        print(f"{twodmatrix[i][j]}",end = " ")
    print("\n")

minorforelement = twodmatrix[0][0]*twodmatrix[1][1]*twodmatrix[2][2]+twodmatrix[0][1]*twodmatrix[1][2]*twodmatrix[2][0]+twodmatrix[0][2]*twodmatrix[1][0]*twodmatrix[2][1]-twodmatrix[0][2]*twodmatrix[1][1]*twodmatrix[2][0]-twodmatrix[1][0]*twodmatrix[0][1]*twodmatrix[2][2]-twodmatrix[1][2]*twodmatrix[2][1]*twodmatrix[0][0]

print(minorforelement)

if sum_position%2 == 0:
    print(minorforelement)
else:
    print(-minorforelement)