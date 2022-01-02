#include <bits/stdc++.h>
#include <string>
using namespace std;
using std::string;
#define lli long long int
lli  n,u;
lli f[1000000],k,a;
int main(){

    if (fopen ("ABCS.inp","r")){
        freopen ("ABCS.inp","r",stdin);
        freopen ("ABCS.out","w",stdout);
    }
    n = 7;
    for (int i=1;i<=n;i++)  cin>>f[i];
    sort (f+1,f+n+1);
    a=f[n];
    k = f[1]+f[2];
    for (int i=3;i<=n;i++){
        if (k+f[i]==a) cout<< f[1] << " " << f[2] << " " << f[i];
    }



}
