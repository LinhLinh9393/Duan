#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	printf("----Bai1-----\n");
	int k;
	printf("\nNhap so k= ");
	scanf("%d",&k);
	if(k%2==0){
		printf("\n%d la so chan",k);
	}else{
		printf("\n%d la so le",k);
	}
	
	printf("\n----Bai2-----");
	float N;
	printf("\nNhap so n= ");
	scanf("%f",&N);
	if(N==(int)N){
		printf("\n%f la so nguyen",N);
	}else if(N/2==0){
		printf("\n%f khong chan khong le");
	}else{
		printf("\n%.1f khong la so nguyen",N);
	}
	
	printf("\n----Bai3-----");
	float toan,van,anh,dtb;
	printf("\nNhap vao diem toan= ");
	scanf("%f",&toan);
	printf("\nNhap diem van= ");
	scanf("%f",&van);
	printf("\nNhap diem anh= ");
	scanf("%f",&anh);
	dtb = (toan+van+anh)/3;
	printf("\nDiem trung binh la: ",dtb);
	if(dtb>=9.0){
		printf("\n%f Xep hang Xuat xac",dtb);
	}else if(dtb>=8.0){
		printf("\n%f Xep hang Gioi",dtb);
	}else if(dtb>=6.5){
		printf("\n%f Xep hang Kha",dtb);
	}else if(dtb>=5.0){
		printf("\n%f Xep hang Trung binh",dtb);
	}else if(dtb<5.0){
		printf("\n%f Xep hang Yeu",dtb);
	}
	
	
	printf("\n----Bai4-----");
	int A,B,C;
	printf("\nNhap a= ");
	scanf("%d",&A);
	printf("\nNhap b= ");
	scanf("%d",&B);
	printf("\nNhap c= ");
	scanf("%d",&C);
	if(A+B>C && A+C>B && B+C>A){
		printf("\nTao thanh mot tam giac",A,B,C);
	}else{
		printf("\nKhong tao thanh mot tam giac",A,B,C);
	}	
	
	printf("\n----Bai5-----");
	float a,b,c,d;
	float x1,x2;
	printf("\nNhap so a:");
	scanf("%f",&a);
	printf("\nNhap so b:");
	scanf("%f",&b);
	printf("\nNhap so c:");
	scanf("%d",&c);
	d=b*b-4*a*c;
	if(a=0, b=0){
		printf("\nPhuong trinh vo nghiem",a,b);	
	}else if(a=0){
		printf("\nPhuong trinh co nghiem duy nhat: ",-c/b);
	}else if(d<0){
		printf("\nPhuong trinh vo nghiem",d);
	}else{
		x1 = (-b+sqrt(d))/(2*a);
        x2 = (-b-sqrt(d))/(2*a);
		printf("\nPhuong trinh co hai nghiem x1= %f",x1);
		printf("\nPhuong trinh co hai nghiem x2= %f",x2);
	}

	
	printf("\n----Bai6-----");
	int doanhthu;
	printf("\nNhap vao tong doanh thu:");
	scanf("%d",&doanhthu);
	if(doanhthu<=100){
		printf("\nMuc hoa hong la 5% ",doanhthu);
    }else if(doanhthu<=200){
	    printf("\nMuc hoa hong la 10% ",doanhthu);
    }else if(doanhthu>=300){
	    printf("\nMuc hoa hong la 15% ",doanhthu);
    }
    
    printf("\n-----Bai7-----");
    int x,y,z;
    printf("\nnhap so a=");
    scanf("%d",&x);
    printf("\nNhap so b=");
    scanf("%d",&y);
    printf("\nNhap so c=");
    scanf("%d",&z);
    int max=x;
    if(max<y){
       max=y;
    }
	if(max<z){
 	   max=z;
    }
    printf("\nSo lon nhat la %d",max);

 
	return 0;
}
