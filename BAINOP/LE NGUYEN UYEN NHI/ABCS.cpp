#include<bits/stdc++.h>
using namespace std;
#define ll long long
int main(){
   freopen("ABCS.INP","r", stdin);
   freopen("ABCS.OUT","w", stdout);
   ll a[7];
   ll ans=0;
   for(ll i=0; i<7; i++){
        cin>>a[i];
   }
   sort(a,a+7);
   for(ll i=0; i<2; i++){
    cout<<a[i]<<" ";
   }
   ans = a[6]-a[0]- a[1];
   cout<<ans;
   return 0;
}
