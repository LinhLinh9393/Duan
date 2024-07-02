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
int n; 
            	printf("\nNhap so n= ");
	            scanf("%.2f",&n);
            	if(n==(int)n){
	                printf("\n%f la so nguyen",n);
	            }else if(n=0){
	            	printf("\n%f khong la so nguyen",n);
	            }else{
		           printf("\n%.1f khong la so nguyen",n);
                }	
	   	        break;
            }
int x,y,a,b;
		   do{
        	  printf("\nNhap so x= ");
	          scanf("%d",&x);
	          printf("\nNhap so y= ");
	          scanf("%d",&y);
	        } while(a<=0 && b<=0);
	        x=a;
	        y=b;
	        while(a!=b){
	        	if(a>b){
	        		a-=b;
				}else{
					b-=a;
			    }	        	
			printf("\nUoc chung lon nhat la: %d",a);
			printf("\nBoi chung nho nhat la: %d",(x*y)/a);
			break;	
    	}			
	{float gioVao,gioRa;
        do{
		printf( "*****Chao mung ban den voi quan Karaoke*****\n");
		printf(" Luu y: Quan chi hoat dong tu 12 -> 23 gio\n");
		printf("\n");
		printf(" Nhap vao gio vao: ");
		scanf("%f",&gioVao);
		printf(" Nhap vao gio ra: ");
		scanf("%f",&gioRa);
		if (gioVao<12 || gioVao>23 || gioRa<12 || gioRa>23){
		    printf(" ==THOI GIAN KHONG HOP LE - MOI BAN NHAP LAI==\n");
		}
		while (gioVao<12 || gioVao>23 || gioRa<12 ||gioRa>23 );
		float tongTien;
		float tongGio=gioRa-gioVao;
		if(gioVao>=12&&gioVao<=23&&gioRa>=12&&gioRa<=23) {
		    if(tongGio<=3){
			tongTien=tongGio*150000;
			printf("\nBan da hat trong khoang thoi gian tu %.0fH toi %.0fH => (%.0f tieng)", gioVao,gioRa, gioRa-gioVao);
			printf("\nTong so tien ban can phai tra la %.0f", tongTien);	
	    }else{
			tongTien=3*150000 + (tongGio-3)*150000*0.7;
			printf("\nBan da hat trong khoang thoi gian tu %.0fH toi %.0fH => (%.0f tieng) ", gioVao,gioRa, gioRa-gioVao);
			printf("\nTong so tien ban can phai tra la %.0f ", tongTien);	
		}	
     	if(gioVao>=14&&gioVao<=17){
			tongTien=tongTien*0.9;
            printf("Tong so tien ban can phai tra sau khi duoc khuyen mai la: %.0f \n",tongTien);		
		}
		break;
    	}
		
		case 4:
        {
	        const float BAC1 = 1.678;
	        const float BAC2 = 1.734;
        	const float BAC3 = 2.014;
	        const float BAC4 = 2.536;
        	const float BAC5 = 2.834;
	        const float BAC6 = 2.927;
	        float soDienTieuThu;
	        float soDienCanDong;
        	printf("\nChao mung ban den voi Menu tinh tien dien:  \n");
	        printf("Nhap vao so dien tieu thu hang thang: ");
	        scanf("%f", &soDienTieuThu);
        	if(soDienTieuThu>=0 && soDienTieuThu <= 50) {
	            printf("Thang nay ban su dung tien dien trong muc 0-->50kWh \n");
		        soDienCanDong = soDienTieuThu*BAC1;
		        printf("So dien ban can phai dong la: %f ", soDienCanDong); 
		    }else if(soDienTieuThu>=51 && soDienTieuThu <= 100) {
	            printf("Thang nay ban su dung tien dien trong muc 51-->100kWh \n");
		        soDienCanDong = (50*BAC1) + (soDienTieuThu - 50)*BAC2;
		        printf("So dien ban can phai dong la: %f ", soDienCanDong); 
	        }else if(soDienTieuThu>=101 && soDienTieuThu <= 200) {
		        printf("Thang nay ban su dung tien dien trong muc 101-->200kWh \n");
		        soDienCanDong = (50*BAC1) + (50*BAC2) + (soDienTieuThu - 100)*BAC3;
		        printf("So dien ban can phai dong la: %f",soDienCanDong);
	        }else if(soDienTieuThu>=201 && soDienTieuThu <= 300) {
		        printf("Thang nay ban su dung tien dien trong muc 201-->300kWh \n");
		        soDienCanDong= (50*BAC1) + (50*BAC2) + (100*BAC3) + (soDienTieuThu-200)*BAC4;
		        printf("So dien ban can phai dong la: %f ", soDienCanDong); 
	        }else if(soDienTieuThu>=301 && soDienTieuThu <=400) {
		        printf("Thang nay ban su dung tien dien trong muc 301-->400kWh \n");
		        soDienCanDong= (50*BAC1) + (50*BAC2) + (100*BAC3) + (100*BAC4) + (soDienTieuThu-300)*BAC5;
	        	printf("So dien ban can phai dong la: %f ", soDienCanDong);
	        }else if(soDienTieuThu>=401){
	        	printf("Thang nay ban su dung tien dien tu 401kWh tro len \n");
		        soDienCanDong= (50*BAC1) + (50*BAC2) + (100*BAC3) + (100*BAC4) + (100*BAC5) + (soDienTieuThu-400)*BAC6;
		        printf("So dien ban can phai dong la: %f ", soDienCanDong); 
	        }	
			break;	
		}	
