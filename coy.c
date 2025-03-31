#include<stdio.h>
int main(){

    int n;
    printf("enter no.of words\n");
    scanf("%d",&n);
    char a[n];
    scanf("%s",a);
    for(int i=0;i<n;i++){
        if(a[i]=='l'){
            printf("%d ",i+1);
        }
}
}