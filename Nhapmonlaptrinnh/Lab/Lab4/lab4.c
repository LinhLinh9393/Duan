#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chonso;
	do{
		printf("\n+----------MENU----------+");
		printf("\n1.In cac bang cuu chuong <=n");
		printf("\n2.Tinh tong tu 1 den n va liet ke so chia het cho 3");
		printf("\n3.Ham nhap diem");
		printf("\n4.Thuc hien hoan vi");
		printf("\n0.Thoat");
		printf("\n+------------------------+");
		printf("\nMoi ban chon chuong trinh: ");
		scanf("%d",&chonso);
		switch(chonso){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			case 3:
				bai3();break;
			case 4:
				bai4();break;
			default:
				printf("\nKhong co chuong trinh giong lua chon");
		}
	}while(chonso!=0);
}
void bai1(){
	int n,i=0;
	printf("\nMoi ban nhap so n: ");
	scanf("%d",&n);
	for (i=0;i<=n;i++){
		int a=1;
		for(a=1;a<=10;a++){
			printf("\n%dx%d=%d",i,a,i*a);
		}
	}
}
void bai2(){
	int n,i=0;
	printf("\nMoi ban nhap so n: ");
	scanf("%d",&n);
	if(i<n){
		i+i++;
	}
	printf("\nTong cac so <n la: %d",i);

}
void bai3(){
	int diem;
	printf("\nMoi ban nhap diem: ");
	scanf("%d",&diem);
	if(diem>=0 && diem<=10){
		printf("\nDiem: %d",diem);
	}else{
		printf("\nNhap sai diem, yeu cau nhap lai");
	}
}
void bai4(){
	int a,b;
	printf("\nNhap so a: ");
	scanf("%d",&a);
	printf("\nNhap so b: ");
	scanf("%d",&b);
	printf("\nBan da nhap a: %d \nBan da nhap b: %d",a,b);
	int temp=a;
	a=b;
	b=temp;
	printf("\nSau khi hoan vi a=%d \nSau khi hoan vi b=%d",a,b);
}

int main(int argc, char *argv[]) {
	menu();
	return 0;
}
