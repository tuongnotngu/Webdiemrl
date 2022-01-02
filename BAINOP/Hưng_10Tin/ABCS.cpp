#include<bits/stdc++.h>
#define ll long long
#define task "ABCS"
using namespace std;
ll a[7]={0},A,B,C,i,n=7,maxx;
ll binary(ll a[],ll n,ll x){
    ll l=1,r=n;
    ll mid;
    while(l<=r){
        mid=(l+r)/2;
        if(a[mid]==x) return 1;
        if(a[mid]>x) r=mid-1;
        if (a[mid]<x) l=mid+1;
    }
    return 0;
}
int main()
{
//  ios_base:: sync_with_stdio(0);
//  cin.tie(0);
//  cout.tie(0);
if(fopen(task".inp","r"))
 {
  freopen(task".inp","r",stdin);
  freopen(task".out","w",stdout);

 }
 maxx=0;
 for (i=1;i<=n;i++) {
        cin>>a[i];
        if(maxx<a[i])maxx=a[i];
 }
 sort(a+1,a+n+1);
 A=a[1];
 for (i=2;i<=n;i++){
    if(binary(a,n,A+a[i])==1) {B=a[i];break;}
 }
 C=maxx-B-A;
 cout<<A<<" "<<B<<" "<<C;

}
