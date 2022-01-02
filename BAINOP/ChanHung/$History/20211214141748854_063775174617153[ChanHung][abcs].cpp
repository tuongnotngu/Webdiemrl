#include<bits/stdc++.h>
#define task "abcs"
using namespace std;
long x[7];
int main(){
    if(fopen(task".inp","r")){
        freopen(task".inp","r",stdin);
        freopen(task".out","w",stdout);
    }
    for(int i=0;i<=6;i++) cin>>x[i];
    sort(x,x+7);
    cout<<x[0]<<' '<<x[1]<<' '<<x[4]-x[0];
}
