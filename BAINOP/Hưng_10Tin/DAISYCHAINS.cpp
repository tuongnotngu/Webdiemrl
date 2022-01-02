#include<bits/stdc++.h>
#define ll long long
#define task "DAISYCHAINS"

ll a[10000],n,i,dem,j,x=0;
double d;
using namespace std;
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
 cin>>n;
 for (i=1;i<=n;i++) {cin>>a[i];x+=a[i];}
 d=x/n;
 dem=1;
 for (i=1;i<=n;i++){
    if(a[i]==d)dem++;
    for (j=i;j<=n;j++){
        if(a[j]==d)dem++;
    }
 }
cout<<dem;

}
