#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	printf("\nvidu2");
	printf("\n======MENU=======");
	printf("\nChon so 1: Vong lap while");
	printf("\nChon so 2: In ra cac so tu 1 den 10(for)");
	printf("\nChon so 3: In ra cac so tu 0 den 10(for)");
	printf("\nChon so 4: In ra cac so chan tu 0 den 10(for)");
	printf("\nChon so 5: In ra cac so le tu 0 den 10(for)");
	printf("\nChon so 0: Thoat");
	printf("\n======END=======");
	int so;
	printf("\nNhap so tu 0 den 5: ");
	scanf("%d",&so);
	switch(so){
		case 0:
			exit(0);
			break;
		case 1:
		   printf("Vong lap while");
		   int x=2;
		   while(x<=5){
		   	 x=x+2;
		   	}
			printf("\nx=%d",x); 
		   break;
		case 2:
		   printf("In ra cac so tu 1 den 10(for)");
		   int i;
		   for(i=1;i<=10;i++){
		   	 printf("\n%d",i);
		   	} 
		   break;
		case 3:
		  printf("In ra cac so tu 10..0(for)");
		  int a;
		  for(a=10;a>=10;i--){
		   printf("\n%d",a);
		   }
		  break;
		case 4:
		   printf("In ra cac so chan tu 0 den 10(for)");
		   int b;
		  for(b=0;b<=10;b=b+2){
		  	 printf("%d",b);
		      }
		   break;
		case 5:
		   printf("In ra cac so le tu 0 den 10(for)");
		    int c;
		  for(c=1;c<=10;c=c+2){
		  	 printf("%d",c);
		     }
		   break;
		default:
		  printf("Nhap khong dung du lieu"); 
	}
	return 0;
}
