#include <stdio.h>
#include <stdlib.h>

int main()
{
int x,i,d,f,r;
printf("entrer le multiplicateur: ");
scanf("%d",&x);
printf("entrer debut plage: ");
scanf("%d",&d);
printf("entrer fin plage: ");
scanf("%d",&f);
if(d<f)
{
    for(i=d;i<=f;i++)
    {
        r=x*i;
        printf("%d * %d = %d\n",x,i,r);
    }
} else{
        printf("impossible");
    }

    return 0;
}
