#include<bits/stdc++.h>
using namespace std;
int d[100000],i,j,a,b,c,e[10000];
int main()
{
    freopen("ABCS.inp","r",stdin);
    freopen("ABCS.out","w",stdout);
    for(i=1;i<=7;i++) cin>>d[i];
    sort(d+1,d+7+1);
    e[1]=d[1];
    e[2]=d[2];
    e[3]=d[7]-d[1]-d[2];
    for(i=1;i<=3;i++) sort(e+1,e+4);
    cout<<e[1]<<" "<<e[2]<<" "<<e[3];

}
