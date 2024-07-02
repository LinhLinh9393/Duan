#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	float diem[100];
	int i;
	float n;
	
	do{
		printf("Moi nhap so sinh vien cua lop: ");
		scanf("%f",&n);
		if(n-(int)n!=0 || n<0){
			printf("\t\aMoi nhap lai!!\n");
		}
	}while(n-(int)n!=0 || n<0);
	
	//Nhap diem cho sinh vien
	printf("Nhap diem cho SV\n ");
	int a=(int)n;
	for(i=0;i<=a-1;i++){
		do{
			printf("Diem cua SV%d: ",i+1);
			scanf("%f",&diem[i]);
			if(diem[i]<0 || diem[i]>10){
				printf("\a\tMoi nhap lai!!\n");
			}
		}while(diem[i]<0 || diem[i]>10);
	}
	
	
	//Xuat thong tin sinh vien
	printf("\n\t================Thong tin sinh vien================\n");
	printf("\tSo luong SV: %d\n",a);
	
	//Sinh vien hoc lai diem<5
	int dem=0;
	for(i=0;i<=a-1;i++){
		if(diem[i]<5){
			dem++;
		}
	}
	printf("\tSinh vien hoc lai: %d\n",dem);
	
	//Sinh vien co diem trung binh cao nhat
	int dem1=0;
	float max=diem[0];
	for(i=0;i<=a-1;i++){
		if(max<=diem[i]){     //Bat buoc phai co MAX de chay lai vong lap FOR
			max=diem[i];
			dem1=i+1;
		}
	}
	printf("\tSinh vien co diem cao nhat la: %d\n",dem1);
	return 0;
}
