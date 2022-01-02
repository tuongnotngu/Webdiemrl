#include<bits/stdc++.h>
#define task "daisychains"
using namespace std;
int n,s=0,p[101];
bool tontai(int x,int y){
    float t=0;
    for(int k=x;k<=y;k++) t+=p[k];
    t=t/(y-x+1);
    for(int k=x;k<=y;k++)
        if(p[k]==t) return true;
    return false;
}
int main(){
    if(fopen(task".inp","r")){
        freopen(task".inp","r",stdin);
        freopen(task".out","w",stdout);
    }
    cin>>n;
    for(int i=1;i<=n;i++)
        cin>>p[i];
    for(int i=1;i<n;i++)
        for(int j=i+1;j<=n;j++)
            if(tontai(i,j)) s++;
    cout<<n+s;
}
