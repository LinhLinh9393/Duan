#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
    int chon;
	do{
		printf("=====Menu=====");
		printf("\n1.Kiem tra chan & le");
		printf("\n2.Bang cuu chuong <= n ");
		printf("\n0.Thoat");
		printf("\n====End====");
		int so;
		printf("\nNhap so tu 0 den 2: ");
	    scanf("%d",&so);
	    switch(so){
	    	case 0:
	    		exit(0);
	    		break;
	    	case 1:
				Bai1("\n1.Kiem tra chan & le");
				break;
			case 2:
				Bai2("\n2.Bang cuu chuong <= n ");
				break;
			default:
				printf("Nhap sai so");
		}
	}while(chon!=0);
	return chon;
}
void Bai1(){
    printf("\nBai1");
	int n;
	printf("\nNhap so n=");
	scanf("%d",&n);
	if(n%2==0){
	    printf("\n%d la so chan",n);	
	}else if(n==0){
		printf("\n%d khong la so chan khong la so le",n);
	}else{
	    printf("\n%d la so le",n);
	}
}	
void Bai2(){
	printf("\nBai2");
	int n,i;
	printf("\nNhap bang cuu chuong so n=");
	scanf("%d",&n);
	for(i=1;i<=n;i++){
		int a;
		for(a=1;a<=10;a++){
		    printf("\n%d * %d = %d",i,a,i*a);
	    }
	}
	
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}

