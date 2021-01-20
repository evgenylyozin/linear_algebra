import java.lang.reflect.Array;
import java.util.Scanner;

/*
Перемножение матриц. Перемножение возможно, если они совместимы 
в том смысле, что число столбцов матрицы A равно числу строк B
*/

public class matrix_multiply
{
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        int first_i = in.nextInt();
        int first_j = in.nextInt();
        int second_i = in.nextInt();
        int second_j = in.nextInt();

        if (first_j != second_i) {
            System.out.println("Несовместимые матрицы");
        } else {
            int[][] first_matrix = new int[first_i][first_j];
            int[][] second_matrix = new int[second_i][second_j];
            int[][] result_matrix = new int[first_i][second_j];
            int temp_result = 0;
            for (int i = 0; i < first_i; i++)
            {
                for (int j = 0; j < first_j; j++)
                {
                   first_matrix[i][j] = in.nextInt();
                }
            }

            for (int i = 0; i < second_i; i++)
            {
                for (int j = 0; j <second_j; j++)
                {
                   second_matrix[i][j] = in.nextInt();
                }
            }
            for (int z = 0; z < second_j; z++)
                {
                for (int i = 0; i < first_i; i++)
                {
                    for (int j = 0; j < first_j; j++)
                    {
                        temp_result += first_matrix[i][j]*second_matrix[j][i];
                    }
                    result_matrix[i][z] = temp_result;
                    temp_result = 0;
                }
            }

            for (int i = 0; i < first_i; i++)
            {
                for (int j = 0; j < second_j; j++)
                {
                   System.out.print(result_matrix[i][j]);
                   System.out.print(" ");
                }
                System.out.print("\n");
            }


        }

        
    }
}