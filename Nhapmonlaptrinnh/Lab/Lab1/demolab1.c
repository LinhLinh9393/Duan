#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	printf("----Bai 1----\n");
	int tienhoc = 8400000, usd;
	usd = 8400000/28000;
	printf("\nHoc Phi =%d",usd);

	printf("\n----Bai 2----");
	int canh1, canh2, C, S;
	printf("\nNhap do dai canh1 HCN : ");
	scanf("%d",&canh1);
	printf("\nNhap do dai canh2 HCN : " );
	scanf("%d",&canh2);
	C = (canh1 + canh2)*2;
	S = canh1 * canh2;
	printf("\nChu vi HCN: %d",canh1, canh2 ,C);
	printf("\nDien tich HCN: %d",S);

	printf("\n----Bai 3----");
	int a, b, c;
	float p,q,s;
	printf("\nDo dai canh a cua tam giac: ");
	scanf("%d",&a);
	printf("\nDo dai canh b cua tam giac: ");
	scanf("%d",&b);
	printf("\nDo dai canh c cua tam giac: ");
	scanf("%d",&c);
	p=(a+b+c)/2;
	q=p*(p-a)*(p-b)*(p-c);
	s=sqrt(q);
	printf("\nDien tich tam giac = %.2f",s);
	
	printf("\n----Bai 4----");
	char mail[50];
	float Dtb;
	printf("\nNhap mail: ");
	scanf("%s",mail);
	printf("Nhap Dtb: ");
	scanf("%f",&Dtb);
	printf("Ten Sinh vien: %s",mail);
	printf("\nDTB : %.2f",Dtb);
	return 0;
}
