#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void bai1();
void bai2();
void bai3();

void menu(){
    int chon;
	do{
		printf("\n=====Menu======");
		printf("\n1. Thong tin than tuong");
		printf("\n2. Thuong tet nhan vien");
		printf("\n3. Thong tin phong ban");
		printf("\n0. Thoat");
		printf("\n=====END======");
		printf("\nNhap so tu 0 den 3:");
		scanf("%d",&chon);
		switch(chon){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			case 3:
				bai3();break;
			default:
				printf("\nNhap sai so");		
		}
	}while(chon!=0);
}
void bai1(){
	char hoten[50],hoatdong[100];
	int tuoi;
	printf("Nhap ho ten than tuong: ");
	fflush(stdin);gets(hoten);
	printf("Nhap tuoi: ");
	scanf("%d",&tuoi);
	printf("Linh vuc hoat dong: ");
	fflush(stdin);gets(hoatdong);
	printf("\n------Thong tin than tuong------");
	printf("\nNhap ho ten than tuong: %s",hoten);
	printf("\nTuoi than tuong: %d",tuoi);
	printf("\nLinh vuc hoat dong: %s",hoatdong);
}
void bai2(){
	int thuong;
	do{
		printf("\nNhap so nam kinh nghiem:");
		scanf("%d",&thuong);
		if(thuong<=5){
			printf("\nThuong 5 trieu");
    	}
		if(thuong<10 && thuong>5){
    		printf("\nThuong 10 trieu");
		}
		if(thuong>10 && thuong<=40){
			printf("\nThuong 20 trieu");
		}
		if(thuong>40){
			printf("\nSo nam kinh nghiem qua 0-40 nam. Moi nhap lai");
		}
	}while(thuong<0 || thuong>40);
}
void bai3(){
	int mang[100];
	float n;
	do{
		printf("\nNhap so phong ban trong cong ty: ");
		scanf("%f",&n);
		if(n-(int)n!=0 || n<0){
			printf("\nNap sai du lieu moi nhap lai");
		}
	}while(n(int)n!=0 || n<0);
	int i;
	for(i=0;i<=(int)n-1;i++){
		printf("\nNhap so nhan vien cua phong ban %d: \n",i+1);
		scanf("%d",&mang[i]);
	}
	printf("\n------Thong tin phong ban---------");
	printf("\nSo luong phong ban: %.0f",n);
	
    int tong=0;
    for(i=0;i<n;i++){
    	tong+=mang[i];
    }	
    printf("\nSo luong phong ban la:",tong);
}	
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
