#include<bits/stdc++.h>
using namespace std;
long long int b,c,sum;
int a[1000001];
bool kiemtra;
int main()
{
	freopen("ABCS.INP","r",stdin);
	freopen("ABCS.OUT","w",stdout);
	for(int i=1;i<=7;i++)
	{
		cin>>a[i];
	}
	sort(a+1,a+8);
	sum=a[1]+a[2];
	c=a[7]-sum;
	for(int i=1;i<=7;i++)
	{
		if(a[i]==c){kiemtra=true;break;}
	}
	if(kiemtra==true)
		cout<<a[1]<<" "<<a[2]<<" "<<c;
}
