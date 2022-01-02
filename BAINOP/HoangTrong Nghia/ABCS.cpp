#include<bits/stdc++.h>
using namespace std;
int i,n,b,tong,tongabc;
int a[7];
bool kt;
int main()
{

	freopen("ABCS.inp","r",stdin);
	freopen("ABCS.out","w",stdout);
	kt=false;
	for (i=1;i<=7;i++)
		cin>>a[i];
	sort (a+1,a+7+1);
	tong=a[1]+a[2];
	tongabc=a[7];
	b=tongabc-tong;
	for (i=1;i<=7;i++)
	{
		if (a[i]==b) {kt=true;break;}
	}
	if (kt==true) cout<<a[1]<<" "<<a[2]<<" "<<b;

}
