#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chon;
	do{
		printf("\n+=======MENU=======+");
		printf("\n1.Thong tin sinh vien");
		printf("\n2.Xep loai sinh vien");
		printf("\n3.Thong tin lop");
		printf("\n0.Thoat");
		printf("\n+=======END=======+");
		printf("\nNhap so tu 0 den 3: ");
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
				printf("\nNhap sai so. Moi chon lai");		
		}
	}while(chon!=0);
}
void bai1(){
	char hoten[50],nganhhoc[100];
	float diemtb;
	printf("\nNhap ho ten sinh vien: ");
	fflush(stdin);gets(hoten);
	printf("\nNhap nganh hoc cua sinh vien: ");
	fflush(stdin);gets(nganhhoc);
	printf("\nNhap diem trung binh cua sinh vien:");
	scanf("%f",&diemtb);
	printf("\n-------Thong tin sinh vien-------");
	printf("\nHo ten sinh vien: %s",hoten);
	printf("\nNganh hoc: %s",nganhhoc);
	printf("\nDiem trung binh: %f",diemtb);
}
void bai2(){
	float diem;
	printf("\nNhap diem trung binh: ");
	scanf("%f",&diem);
	if(diem>=9 && diem<10){
		printf("\nXep loai Xuat sac");
	}else if(diem<9 && diem>=8){
		printf("\nXep loai Gioi");
	}else if(diem<8 && diem>=6.5){
		printf("\nXep loai Kha");
	}else if(diem<6.5 && diem>=5){
		printf("\nXep loai Trung binh");
	}else if(diem<5 && diem>=0){
		printf("\nXep loai Yeu");
	}else{
		printf("\nNhap sai diem moi nhap lai");
	}
}
void bai3(){
	int mang[100],i;
	int n;
	printf("\nNhap so luong sinh vien cua lop: ");
	scanf("%d",&n);
	for(i=1;i<=n;i++){
		printf("\nNhap diem trung binh cho tung sinh vien %d: ",i);
		scanf("%d",&mang[i]);
	}
	printf("\n-----Thong tin sinh vien-----");
	printf("\nSo luong sinh la: %d",n);
	printf("\nCac sinh vien hoc lai(diem<5) la:");
	for(i=1;i<=n;i++){
		if(mang[i]<5){
			printf("%d",i);
		}
	}
	float max;
	int dem=0;
	for(i=1;i<=n;i++){
		if(max<mang[i]){
			max=mang[i];
			dem=i;
		}
	}
	printf("\nSinh vien co diem trung binh cao nhat la: sinh vien %d",dem);
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
