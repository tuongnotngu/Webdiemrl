#include<bits/stdc++.h>
using namespace std;
using ll=long long;

int main()
{
    freopen("ABCS.INP","r",stdin);
    freopen("ABCS.OUT","w",stdout);
    ll n,a[10],t,b[10];
    t=0;
    for(ll i=1;i<=7;i++)
        {cin>>a[i];n+=a[i];b[i]=a[i];}
    sort(a+1,a+1+7);
    n/=4;
    for(ll i=1;i<=2;i++)
        cout<<a[i]<<' ';
    if(a[3]==a[1]+a[2]) t=1;
    if(a[4]==a[1]+a[2]) t=2;
    if(t==2) cout<<a[3]<<' ';
        else cout<<a[4]<<' ';
}
