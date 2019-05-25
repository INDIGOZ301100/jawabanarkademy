#include <stdio.h>

int main ()
{
    int n,i,j;
    printf ("-----Program Menampilkan Persegi-----\n");
    printf ("\nMasukan Panjang dan lebar (Harus Ganjil) =  "); scanf ("%d", &n);

    if ( n>0 )
    {
        for ( i=0; i<n; i++ )
        {
            for (j=0; j<n; j++)
            {
                {
                    printf ("x");
                }
            }
            printf ("\n");
        }
    }
    return 0;
}